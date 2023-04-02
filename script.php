<script>
 function alert(type,msg){

    let be_class=(type == 'success')? 'alert-success':'alert-danger';

    let element= document.createElemnt('div');

    element.innerHtml=` 
    
    <div class="alert ${bg_class} alert-dismissible custom-alert fade show" role="alert">
    <strong class="me-3">${msg}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    
    `;

    document.body.append(element);
 }

</script>