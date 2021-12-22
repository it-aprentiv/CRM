var facture = {

    /**
     * Calcul du montant TVA
     * @param {type} montantHT
     * @param {type} pourcentageTVA
     * @returns {Number}
     */
    calculerMontantTVA: function (montantHT, pourcentageTVA) {

        return (montantHT * pourcentageTVA / 100);
    },

    caluculerTTC: function (montantHT, montantTVA) {

        return parseFloat(montantHT + montantTVA).toFixed(2);
    },
    
    
    /**
     * Formattage monnaie
     * @param {type} number
     * @returns {undefined}
     */
    moneyFormat(number) {
        
        return numberUtils.format(number, 2, ',', ' ');
    },

    updateChampsMontants: function (type) {
        let $totalHTN = $('#facture_avoir_totalHt');
        let $totalHTN1 = $('#facture_avoir_resteARegler');
        let $pourcentageTVA = $('#facture_avoir_pourcentageTva');
        let $montantHT = $('#facture_avoir_totalRegleHt');
        let $totalTTC = $('#facture_avoir_totalRegle');
        let $montantTVA = $('#facture_avoir_mntTva');
        let totalHT = (common.convertStringToFloat($totalHTN.val()) * 1) + (common.convertStringToFloat($totalHTN1.val()) * 1);

        if ('avoir' === type) {
            // Fix : APR-154
            $totalHTN = $('#facture_avoir_idAvoirLiee_totalHt');
            $totalHTN1 = 0;
            $pourcentageTVA = $('#facture_avoir_idAvoirLiee_pourcentageTva');
            $montantHT = $('#facture_avoir_idAvoirLiee_totalHt');
            $totalTTC = $('#facture_avoir_idAvoirLiee_totalTtc');
            $montantTVA = $('#facture_avoir_idAvoirLiee_mntTva');
            totalHT = (common.convertStringToFloat($totalHTN.val()) * 1);
        }

        const montantTVA = facture.calculerMontantTVA(totalHT, $pourcentageTVA.val());
        $montantHT.val(facture.moneyFormat(totalHT));
        $montantTVA.val(facture.moneyFormat(montantTVA));
        $totalTTC.val(facture.moneyFormat(facture.caluculerTTC(totalHT, montantTVA)));
    }
};

$(function () {
    $('#facture_avoir_totalHt, #facture_avoir_resteARegler, #facture_avoir_pourcentageTva').on('keyup blur change', function () {
        facture.updateChampsMontants('facture');
    });

    $('#facture_avoir_idAvoirLiee_mntTtc, #facture_avoir_idAvoirLiee_pourcentageTva').on('keyup blur change', function () {
        facture.updateChampsMontants('avoir');
    });
});