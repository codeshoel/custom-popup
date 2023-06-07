


$(document).ready(function() {

    // alert("welcome ")
    $(".select-state-select2").select2();

    $(".select-lga-select2").select2();

    $(".select-ward-select2").select2();

    $(".select-supervisor-select2").select2();


    // INCIDENCE REPORT PANEL FIELDS
    $(".select-election-type-select2").select2();

    $(".incidence-sub-category").select2();
    $(".select-category-select2").select2();


    // $('body').on('click', '.select2-results__option', function(){
    //     alert('Yes');
    // })

    $("#state_c").on('change', function(){

        fetch('http://localhost/inec_crm/custom_scripts/app/script_handler.php?state_id='+this.value)
        .then(e=>{
            return e.json()
        })
        .then(res=>{
            // console.log(res)
            $.each(res, function(index, item){
                // console.log(index);
                $('#lga_c').append($('<option>', {
                    value: item,
                    text: item
                }));
            });
            // $('#lga_c').append('<option>'+res+'</option>')
        })
        .catch(err=>{
            console.log(err)
        })
    })

    $("#lga_c").on('change', function(){
        let lga_label=getSelectedText(this);
        let state=document.getElementById('state_c')
        alert(state)
        let state_label=getSelectedText(state);
        alert(state_label)
        lga_label=state_label+'_'+lga_label;
        fetch('http://localhost/inec_crm/custom_scripts/app/script_handler.php?lga_id='+lga_label)
        .then(e => {
            return e.json()
        })
        .then(res => {
            console.log(res);
        }).catch(err => {
            console.log(err);
        })
    })

    function getSelectedText(elt) {
        if (elt.selectedIndex == -1)
            return null;

        let label = elt.options[elt.selectedIndex].text;
        return label;
    }
    

});



