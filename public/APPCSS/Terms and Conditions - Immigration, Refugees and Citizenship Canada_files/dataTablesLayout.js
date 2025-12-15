function getLanguageArray() {
	if (lang && lang === 'fr') {
		return  {"sProcessing":     "Traitement en cours...",
				"sSearch":         "Rechercher&nbsp;:",
				"sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
				"sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
				"sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
				"sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
				"sInfoPostFix":    "",
				"sLoadingRecords": "Chargement en cours...",
				"sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
				"sEmptyTable":     "Aucune donn\xe9e disponible dans le tableau",
				"oPaginate": {
					"sFirst":      "Premier",
					"sPrevious":   "Pr&eacute;c&eacute;dent",
					"sNext":       "Suivant",
					"sLast":       "Dernier"
				},
				"oAria": {
					"sSortAscending":  ": activer pour trier la colonne par ordre croissant",
					"sSortDescending": ": activer pour trier la colonne par ordre décroissant"
				}
		};
	}
	else
	{
		return {
				"sProcessing":     "Processing...",
				"sSearch":         "Search:",
				"sLengthMenu":     "Show _MENU_ entries",
				"sInfo":           "Showing _START_ to _END_ of _TOTAL_ entries",
				"sInfoEmpty":      "Showing 0 to 0 of 0 entries",
				"sInfoFiltered":   "(filtered from _MAX_ total entries)",
				"sInfoPostFix":    "",
				"sLoadingRecords": "Loading...",
				"sZeroRecords":    "No matching records found",
				"sEmptyTable":     "No data available in table",
				"oPaginate": {
					"sFirst":      "First",
					"sPrevious":   "Previous",
					"sNext":       "Next",
					"sLast":       "Last"
				},
				"oAria": {
					"sSortAscending":  ": activate to sort column ascending",
					"sSortDescending": ": activate to sort column descending"
				}
		};
	}
	
}
