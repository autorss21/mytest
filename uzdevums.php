
<!DOCTYPE html>
<html  >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet"  type="text/css" href="style.css">
            <title>CV generator </title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
           
            
 
 
 </head>

<body>
 
 <h1 class="CV">CV Ģenerators</h1>
 
<div class="form-group">
<form  name="CV" action="uzd_back.php"  enctype="multipart/form-data"  method="POST"  accept-charset="UTF-8">
    
   <div class="col-xs-3">
     <tr>
          <div class="marg2"> 
      <label>Vārds Uzvārds<font color=red>*</font></label>
             </div>  
             <td><input type=text name="vards" id="vards" placeholder="Janis" class="form-control input-sm"   required /></td>
             <td><input type=text name="uzvards" id="uzvards" placeholder="Bērziņš" class="form-control input-sm" required /></td>
      <br>
     </tr> 
    <label>Dzimšanas datums<font color=red>*</font></label>           
              <td><input type=text name="bday" id="bday" placeholder="12.12.2018" class="form-control input-sm"   required/></td>
               <br>
    <label> E-pasta adrese<font color=red>*</font></label>            
    <td><input class="form-control" type="email" name="email" id="mail" placeholder="janis@gmail.com" required    /></td>
               <br>
    <label>Telefons:<font color=red>*</font></label>    
    <td><input type=text name="phone" id="phone" placeholder="37121111111" class="form-control input-sm"  required  /></td>
               
      <div class="marg2">
     <label  >
          
            Pievienot Foto<font color=red>*</font>
     </label>
       </div>
       <input type="file" name="image"  id="image" accept="image/*"  onchange="readURL(this);" required  />
          <img id="Image"  src="#" alt="150x200px" >
        <script>  
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#Image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }  
  </script>      
           <div class="marg2">
         <span style="font-weight: bold; font-size: 20px; ">Iemaņas un zināšanas</span>             
            </div>    
             
             <div class="marg3"> 
     <label>Valodu zināšanas</label>  
             </div>
          </div>
               
        <div class="col-xs-10">        
    <table class="table table-bordered" id="EN">
       <tr>
         <td class="td1"> Angļu valoda<font color=red>*</font> <class="form-control"/></td>
         <td ><input type=text name="angl[]" id="uroven1" placeholder="Runātprasme" class="form-control name_list" required /></td>
         <td ><input type=text name="angl[]" id="uroven2" placeholder="Lasītprasme " class="form-control name_list" required  /></td>
         <td ><input type=text name="angl[]" id="urove3" placeholder="Rakstītprasme" class="form-control name_list" required  /></td>
       </tr>  
    </table> 
     <table class="table table-bordered" id="LV">
        <tr>  
        <td class="td1">Latviešu valoda<font color=red>*</font><class="form-control"/></td>
         <td ><input type=text name="latv[]" id="uroven1" placeholder="Runātprasme" class="form-control name_list" required  /></td>
         <td><input type=text name="latv[]" id="uroven2" placeholder="Lasītprasme " class="form-control name_list"required  /></td>
         <td ><input type=text name="latv[]" id="urove3" placeholder="Rakstītprasme" class="form-control name_list" required  /></td>
        </tr>
    </table>
     <table class="table table-bordered" id="dynamic">
       <tr> 
         <td class="td1">Krievu Valoda<font color=red>*</font><class="form-control"/></td>
         <td><input type=text name="krie[]" id="uroven1" placeholder="Runātprasme" class="form-control name_list" required  /></td>
         <td><input type=text name="krie[]" id="uroven2" placeholder="Lasītprasme " class="form-control name_list" required  /></td>
         <td><input type=text name="krie[]" id="urove3" placeholder="Rakstītprasme" class="form-control name_list" required  /></td>
        </tr>
        <tr> 
        <td></td><td></td><td></td>
         <td><button  type="button" name ="Dobavit" id="dobavit" class="btn btn-success">Pievienot Vēl Valodu</button></td>
        </tr>
        <tr>
    </table> 
       </div>
         <div class="col-xs-6">
    <table class="table table-bordered" id="PC">
         <div class="marg3"> 
      <label>Datorzinašanas</label> 
            </div>
      <tr>
        <td><input type=text name="dators[]" id="sname" placeholder="Programmas nosaukums" class="form-control name_list"  required  /></td> 
        <td><input type=text name="dators[]" id="level" placeholder="Zināšanu līmenis" class="form-control name_list" required /></td>
        <td><button  type="button" name ="pcskills" id="pcskills" class="btn btn-success">Pievienot Vēl Programmas </button></td> 
      </tr>
   
    </table>  
         </div> 
         
      <p></p>
  
         
     <div class="col-xs-12">
    <table class="table table-bordered" id="work">
      
        <div class="marg2">
         <span style="font-weight: bold; font-size: 20px; ">Darba pieredze</span>             
            </div>  <br>
        
        
              
           <tr>
             <td><input type=text name="darbs[]" id="darbs" placeholder="Darba vieta/Uzņēmums:" class="form-control name_list" required   /></td> 
          
           
             <td class="td2"><input type=text name="darbs[]" id="darbs" placeholder="Datums no:" class="form-control name_list" required   /></td> 
             <td class="td2"><input type=text name="darbs[]" id="darbs" placeholder="Datums līdz:" class="form-control name_list" required   /></td> 
          
           
             <td><input type=text name="darbs[]" id="darbs" placeholder="Ieņemamais amats" class="form-control name_list"  required  /></td> 
                
          
             <td><input type=text name="darbs[]" id="darbs" placeholder="Amata kategorija " class="form-control name_list"  required  /></td> 
          
           </tr>   
            
             <tr>
              <td></td> <td></td> <td></td> <td></td> 
             <td><button  type="button" name ="addwork" id="addwork" class="btn btn-success">Pievienot Vēl Darba vietu </button></td>
             </tr>
    
     
              
      </table>        
        </div>  
      <div class="col-xs-12">
     <table class="table table-bordered" id="education">

          <div class="marg2">
         <span style="font-weight: bold; font-size: 20px; ">Izglītība</span>             
            </div>  <br>      
              
              
           <tr>
              <td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Izglītības iestādes nosaukums:" class="form-control name_list"required    /></td> 
              <td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Valsts:" class="form-control name_list" required   /></td> 
              <td class="td2"><input type=text name="izglitiba[]" id="izglitiba" placeholder="Gads no:" class="form-control name_list"  required  /></td> 
              <td class="td2"><input type=text name="izglitiba[]" id="izglitiba" placeholder="Gads līdz:" class="form-control name_list" required  /></td> 
              <td style="  width: 260px; "><input type=text name="izglitiba[]" id="izglitiba" placeholder="Specialitāte" class="form-control name_list" required   /></td> 
           </tr>
            <tr>
              <td></td> <td></td> <td></td> <td></td> 
             <td><button  type="button" name ="addizglitiba" id="addizglitibas" class="btn btn-success">Pievienot Vēl iestādes </button></td>
             </tr>  
         </table>        
        </div>      
             
   <div class="col-xs-12">              
   <input type="submit" name="sohranit" class="btn btn-primary"  value="Ģenerēt PDF un sūtīt">  
     <br><br> 
   
   </div>  
 </form> 
 </div> 
 <div>
 <br>
 </div>
 <script>  
 $(document).ready(function(){  
      var i=1;
       var i2=1; 
       var i3=1; 
       var i4=1;
      $('#dobavit').click(function(){  
           i++;  
           $('#dynamic').append('<tr id="row'+i+'"><td><input type=text name="name[]" id="jazik" placeholder="Valoda" class="form-control name_list" required /><td><input type=text name="name[]" id="uroven1" placeholder="Runātprasme" class="form-control name_list" required /></td><td><input type=text name="name[]" id="uroven2" placeholder="Lasītprasme " class="form-control name_list" required /></td><td><input type=text name="name[]" id="urove3" placeholder="Rakstītprasme" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Dzēst</button></td></tr>');  
 });  
  
 
   $('#pcskills').click(function(){  
           i2++;
      $('#PC').append('<tr id="row'+i2+'"><td><input type=text name="dators[]" id="sname" placeholder="Programmas nosaukums" class="form-control name_list" required /><td><input type=text name="dators[]" id="level" placeholder="Zināšanu līmenis" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i2+'" class="btn btn-danger btn_remove">Dzēst</button></td></tr>');       
    
   }); 
   
    $('#addwork').click(function(){  
           i3++;
      $('#work').append('<tr id="row'+i3+'"><td><input type=text name="darbs[]" id="darbs" placeholder="Darba vieta/Uzņēmums:" class="form-control name_list" required /></td><td><input type=text name="darbs[]" id="darbs" placeholder="Datums no:" class="form-control name_list" required /></td><td><input type=text name="darbs[]" id="darbs" placeholder="Datums līdz:" class="form-control name_list" required /></td><td><input type=text name="darbs[]" id="darbs" placeholder="Ieņemamais amats" class="form-control name_list" required /></td><td><input type=text name="darbs[]" id="darbs" placeholder="Amata kategorija " class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i3+'" class="btn btn-danger btn_remove">Dzēst</button></td></tr>');   
   
   });
  $('#addizglitibas').click(function(){  
           i4++;
      $('#education').append('<tr id="row'+i4+'"><td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Izglītības iestādes nosaukums:" class="form-control name_list" required /></td><td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Valsts:" class="form-control name_list" required /></td> <td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Gads no:" class="form-control name_list" required /></td> <td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Gads līdz:" class="form-control name_list" required /></td> <td><input type=text name="izglitiba[]" id="izglitiba" placeholder="Specialitāte" class="form-control name_list" required /></td></td><td><button type="button" name="remove" id="'+i4+'" class="btn btn-danger btn_remove">Dzēst</button></td></tr>'); 
   });        
      
 });
  $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });   
 </script> 

 
 

</body>
</html> 
 