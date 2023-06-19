// The rest of the code goes here!
var common = {

    /**
     * Initialisation
     * @returns {undefined} 
     */
    init: function () {
        common.formatPriceField($('.money-format'));
    },

    /**
     * formater les nombre avec des séparateur de millier
     *
     * @param money
     * @returns {string}
     */
    separateMilleniumPrice: function (money) {
        return money.replace(/ /g, "").replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    },

    priceFormat: function (element) {
        // element.value = element.value.replace(/ /g, "");
        // element.value = element.value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        element.value = common.separateMilleniumPrice(element.value);

        return element;
    },

    telephoneFormat: function (element) {
        element.value = element.value.replace(/ /g, "");
        element.value = element.value.replace(/\B(?=(\d{2})+(?!\d))/g, " ");
        if(element.value.length > 14){
            element.value = element.value.substr(0,14);
        }
        return element;
    },

    /**
     * Permettre la saisie de nombre décimal seulement
     * @param {type} event
     * @returns {undefined}
     */
    allowDecimalCharOnly: function (event) {
        var theEvent = event || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);

        if (key.length === 0) {
            return;
        }

        var regex = /^[0-9.,\b]+$/;
        var element = theEvent.currentTarget;
        if (!regex.test(key)) {
            theEvent.returnValue = false;

            if (theEvent.preventDefault) {
                theEvent.preventDefault();
            }
        }
    },
    allowsiretOnly: function (event,element) {
        var theEvent = event || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);

        if (key.length === 0) {
            return;
        }

        var regex = /^[0-9\b]+$/;
        if (!regex.test(key)) {
            theEvent.returnValue = false;

            if (theEvent.preventDefault) {
                theEvent.preventDefault();
            }
        }
        if(element.value.length > 14){
            element.value = element.value.substr(0,14);
        }
    },
    allowNumSecuriteSocialOnly: function (event,element) {
        var theEvent = event || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);

        if (key.length === 0) {
            return;
        }

        var regex = /^[0-9\b]+$/;
        if (!regex.test(key)) {
            theEvent.returnValue = false;

            if (theEvent.preventDefault) {
                theEvent.preventDefault();
            }
        }
        if(element.value.length > 13){
            element.value = element.value.substr(0,13);
        }
    },
    allownafOnly: function(event,element) {
        var theEvent = event || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);

        if (key.length === 0) {
            return;
        }
        element.value = element.value.toUpperCase();
        var fournumber = /^[0-9\b]+$/;
        if(element.value.length < 4){
            if (!fournumber.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) {
                    theEvent.preventDefault();
                }
            }
        }
        else{
            var onechar = /^[A-Za-z\b]+$/;
            if(!onechar.test(key)){
                theEvent.returnValue = false;
                if (theEvent.preventDefault) {
                    theEvent.preventDefault();
                }
            }
            if(element.value.length > 5) {
                element.value = element.value.substr(0,5);
            }
        }
    },

    /**
     * Formattage de l'affichage des champs prix
     * Autoriser la saisie des nombres seulement
     * Ajout séparateur de millier et décimal
     * 
     * @param {type} element : selecteur
     * @returns {undefined}
     */
    formatPriceField: function (element, event) {
        let key = event.keyCode || event.which;
        key = String.fromCharCode(key);
        var numericReg = /^[\b]+$/;

        if (numericReg.test(key) || key === '%' || key === "'") {
            return;
        }

        common.priceFormat(element);
    },

    /**
     * Désactive tous les champs d'un formulaire sauf les classes à exclure
     * 
     * @param string excludedClass
     * @returns {undefined}
     */
    disableFormFields: function (excludedElementSelector) {
        $(':input').not(excludedElementSelector).attr("disabled", true);
    },

    /**
     * Activer tous les champs d'un formulaire (sauf les éléments avec class à exclure)
     * @param {type} excludedElementSelector
     * @returns {undefined}
     */
    enableFormFields: function (excludedElementSelector) {
        $(':input').not(excludedElementSelector).attr("disabled", false);
    },

    /**
     * parser une valeur monétaire en float
     *
     * @param moneyValue
     * @returns float
     */
    parseMoney: function (moneyValue) {
        var value = moneyValue.replace(/\s/g, '').replace(',', '.');

        return common.parseFloatValue(value);
    },

    /**
     * arrondir un nombre float
     *
     * @param number
     * @param n
     * @returns {number}
     */
    roundFloat: function (number, n) {
        var decaExpo = Math.pow(10, n);
        number = parseFloat(number) * decaExpo;
        number = Math.round(number);

        return number / decaExpo;
    },

    /**
     * formater en affichage monétaire
     *
     * @param money
     * @returns {*|string}
     */
    formatMoney: function (money) {
        money = common.roundFloat(money, 2);
        var moneyString = money.toString().replace('.', ',');

        return common.separateMilleniumPrice(moneyString)
    },

    /**
     * 
     * @param {type} tarif
     * @returns {Number}
     */
    convertStringToFloat: function (text) {
        if (!text) {
            return 0;
        }

        let input = text.replace(/ /g, "");
        input = input.replace(/,/g, ".");

        return parseFloat(input).toFixed(2);
    },

    parseFloatValue: function (number) {
        var value = parseFloat(number);

        return isNaN(value) ? 0 : value;
    },
    
    escapeHTML: function(text) {
        var map = {
          '&': '&amp;',
          '<': '&lt;',
          '>': '&gt;',
          '"': '&quot;',
          "'": '&#039;'
        };

        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }
};

$(function () {
    $('.money-format').on('keypress keyup blur change', function (event) {
        common.allowDecimalCharOnly(event);
        common.formatPriceField(this, event);
    });
    $(document).on('keypress keyup blur', '.telephone-format', function (event) {
        common.allowDecimalCharOnly(event);
        common.telephoneFormat(this);
    });
    $('.number-format').on('keypress keyup blur', function (event) {
        common.allowDecimalCharOnly(event);
    });
    $('.siret_format').on('keypress keyup blur', function (event) {
        common.allowsiretOnly(event,this);
    });
    $(document).on('keypress keyup blur', '.num_secu_social_format', function (event) {
        common.allowNumSecuriteSocialOnly(event, this);
    });
    $('.naf_format').on('keypress keyup blur', function(event) {
        common.allownafOnly(event,this);
    });
    $('.tva_format').on('keypress keyup blur', function(event) {
        common.allownafOnly(event,this);
        if(this.value.length > 2){
            this.value = this.value.substr(0,2);
        }
    });
    
    $('table tbody tr').on('dblclick', function(e) {
        if ($(this).is('[data-href]')) {
            window.location.href = $(this).attr('data-href');
        }
    });
    
    $.fn.select2.defaults.set("language", "fr");
    
});