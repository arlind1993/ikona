$(window).ready(function() {
    function loadLanguage(lang) {
        $.getJSON("langs/"+ lang + '.json', function(data) {
            console.log(data);
            for([key, value] in data){
                $('[data-id="'+key+'"]').each(function (){
                    const messageParsed = parseMessage(data, value, $(this).data());
                    console.log("message", messageParsed, dataAttributes);
                    $(this).html(messageParsed);
                });

                $('[data-alt="'+key+'"]').each(function (){
                    $(this).attr('alt', value);
                });
                
                $('[data-placeholder="'+key+'"]').each(function (){
                    $(this).attr('placeholder', value); 
                });
            }
            
        });
      }
    function transformData(value, languageData, dataAttributes){
        const lang = languageData[value];
        let num = parseFloat(languageData);
        num = isNaN(num) ? null : num;
        const res = vars[value] ?? lang ?? num ?? value;
        console.log("data trans", res);
        return res;
    }

    function parseMessage(languageData, value, domData = {}){
        
        const dataAttributes = {};

        for([key, value] in domData){
            dataAttributes["data-"+key] = value;
        }

        if(!value.includes("${")){
            return value;
        }
        var message = "";
        var temp = "";
        var inside = 0;

        console.log("Temp",value);
        for(var i=0; i < value.length; i++){
            const ch = value.charAt(i);
            if(ch=="$" && inside === 0){
                inside = 1;
            }else if(ch == "{" && inside === 1){
                inside = 2;
                temp = "";
            }else if(ch == "}" && inside === 2){
                inside = 0;
                var comp1 = "";
                var operator = "";
                var comp2 = ""; 
                var ter1 = "";
                var ter2 = "";
                var ternStatus = 0;
                console.log("Temp:",temp);
                for(let j = 0; j < temp.length ; j++){
                    const chT = temp.charAt(j);
                    if(temp.charAt(j) == " ") continue;
                    if(chT == "=" || chT == "<" || chT == ">" ){
                        ternStatus = 1;
                        operator += chT;
                    }else if(chT == "?" || chT == ":"){
                        ternStatus++;
                    }else{
                        switch(ternStatus){
                            case 0: comp1+=chT; break;
                            case 1: comp2+=chT; break;
                            case 2: ter1+=chT; break;
                            case 3: ter2+=chT; break;
                            default: break;
                        }
                    }
                }
                
                console.log("Ternary:",{comp1, operator, comp2, ter1, ter2, ternStatus});
                if(ternStatus === 0){
                    temp = transformData(comp1, languageData, dataAttributes);
                }else{
                    comp1 = transformData(comp1, languageData, dataAttributes);
                    comp2 = transformData(comp1, languageData, dataAttributes);
                    let resComparison = false;

                    switch(operator){
                        case ">": resComparison = comp1 > comp2; break;
                        case ">=": resComparison = comp1 >= comp2; break;
                        case "<": resComparison = comp1 < comp2; break;
                        case "<=": resComparison = comp1 <= comp2; break;
                        case "==": resComparison = comp1 == comp2; break;
                        default: break;
                    }

                    if(ternStatus === 3){
                        ter1 = transformData(ter1, languageData, dataAttributes);
                        ter2 = transformData(ter2, languageData, dataAttributes);
                        temp = resComparison ? ter1 : ter2;
                    }else{
                        temp = resComparison;
                    }
                }
                message += temp;
            }else{
                if(inside === 2){
                    temp += ch;
                }else if(inside === 0){
                    message += ch;
                }
            }
        } 
        console.log("Full message:", message);
        return message;
    }
    window.changeLanguage = function(lang) {
        Cookies.set('language', lang, { expires: 31 });
        loadLanguage(lang);
        $('.act-lang').removeClass('act-lang');
        $('#'+lang+'_title').addClass('act-lang');
    };

    var savedLang = Cookies.get('language');
    changeLanguage(savedLang ?? 'en');
});
