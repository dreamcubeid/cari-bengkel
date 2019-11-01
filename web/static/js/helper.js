/**
 * js/global.js
 * All custom javascript helpers
 */

function slugify(string) {
	const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;';
	const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnooooooooprrsssssttuuuuuuuuuwxyyzzz------';
	const p = new RegExp(a.split('').join('|'), 'g');

	return string.toString().toLowerCase()
		.replace(/\s+/g, '-') // Replace spaces with -
		.replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
		.replace(/&/g, '-and-') // Replace & with 'and'
		.replace(/[^\w\-]+/g, '') // Remove all non-word characters
		.replace(/\-\-+/g, '-') // Replace multiple - with single -
		.replace(/^-+/, '') // Trim - from start of text
		.replace(/-+$/, '') // Trim - from end of text
}

function checkIndonesiaNumber(phoneNumber){

    var operators = {
        "FLEXI":{
            "name":"TELKOM",
            "pattern":new RegExp(/^021(68|70)\d{4,8}$|^0([2-7]|9)[^1]\d?(3[^1]|68|70|80|81)\d{4,8}$/)
        },
        "SIMPATI":{
            "name":"TELKOMSEL",
            "pattern":new RegExp(/^08(11|12|13|21|22|23)\d{6,8}$/)
        },
        "AS":{
            "name":"TELKOMSEL",
            "pattern":new RegExp(/^08(52|53)\d{8}$/)
        },
        "MENTARI":{
            "name":"INDOSAT",
            "pattern":new RegExp(/^08(14|15|16|55|58)\d{6,8}$/)
        },
        "IM2":{
            "name":"INDOSAT",
            "pattern":new RegExp(/^0814\d{8}$/)
        },
        "IM3":{
            "name":"INDOSAT",
            "pattern":new RegExp(/^08(56|57)\d{7,8}$/)
        },
        "STARONE":{
            "name":"INDOSAT",
            "pattern":new RegExp(/^0(2130|3160)\d{4,8}$|^0([2-7]|9)[^1]\d?(61|62|63|90)\d{4,8}$/)
        },
        "XL BEBAS":{
            "name":"XL AXIATA",
            "pattern":new RegExp(/^08(17|18|19|77|78|79)\d{6,8}$/)
        },
        "SMART":{
            "name":"SMARTFREN","pattern":new RegExp(/^08(81|82)\d{4,8}$/)
        },
        "FREN":{
            "name":"SMARTFREN","pattern":new RegExp(/^0888\d{4,8}$/)
        },
        "HEPI":{
            "name":"SMARTFREN",
            "pattern":new RegExp(/^0([2-7]|9)\d{1,2}(21|31|50)\d{4,8}$/)
        },
        "ESIA":{
            "name":"BTEL",
            "pattern":new RegExp(/^(02180)\d{4,8}$|^0([2-7]|9)[^1]\d?9\d{4,8}$/)
        },
        "THREE":{
            "name":"HCPT",
            "pattern":new RegExp(/^08(96|97|98|99)\d{7,8}$/)
        },
        "AXIS":{
            "name":"AXIS",
            "pattern":new RegExp(/^08(38|31)\d{7,8}$/)
        },
        "CERIA":{
            "name":"STI",
            "pattern":new RegExp(/^0828\d{4,8}$/)
        }
    };

    var result = false;
    $.each(operators, function(service, operator) { 
        if (operator['pattern'].test(phoneNumber)) {
            result = {'provider' : operator['name'], 'product' : service};
            return false;
        }   
    });
    
    return result;  
}