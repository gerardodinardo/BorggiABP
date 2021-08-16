$("[data-toggle=popover]").popover();

jQuery(document).ready(function() {
    $('.estat').popover({
       trigger:'hover',
       content:'Verd significa que està oberta, vermell que ja està tancada.',
       placement:'right'
   });
});

jQuery(document).ready(function() {
    $('.nIncidencia').popover({
       trigger:'hover',
       content:'El codi va augmentat automàticament.',
       placement:'left'
   });
});

jQuery(document).ready(function() {
    $('.localitzacio').popover({
       trigger:'hover',
       content:'Direcció específica on es troba la incidència.',
       placement:'top'
   });
});

jQuery(document).ready(function() {
    $('.hora').popover({
       trigger:'hover',
       content:'Hora exacta en rebre la trucada de la incidència.',
       placement:'top'
   });
});

jQuery(document).ready(function() {
    $('.descripcioIncident').popover({
       trigger:'hover',
       content:'Breu resum clar, sobre la incidència en qüestió.',
       placement:'top'
   });
});
