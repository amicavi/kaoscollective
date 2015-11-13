<?php
    $review_rating = get_post_meta($post->ID, 'review_rating',true);
    //print_r($review_rating);  
    $counter=0;//time();
?>
        
       <table style="display: inline-table; width: 100%;">
       
 <tr><td></td><td></td></tr>
 <tr><td>
       
       <table id="ratingtable" class="widefat"  border="0" width="100%" cellspacing="0" cellpadding="0" >
       <thead>
        <tr><th><label>Feature Name</label> </th><th><label>Rating </label></th><th><label>Action</label></th></tr>
        </thead> 
        
<tbody>        
           <?php if( !empty($review_rating['concept'][0])){  //echo "top loop";
            for($j=0;$j<count($review_rating['concept']);$j++){
                ?>
   <tr class="rating_<?php echo $counter;?>">
      <td class="frow">

                <input name="review_rating[concept][]" value="<?php echo $review_rating['concept'][$j]; ?>" style="padding:3px 10px;width:100%;" type="text">
               
        
   
      </td>
      <td>
      
   <select name="review_rating[rating][]">
        <option value="5" <?php if($review_rating['rating'][$j]=="5")echo "selected='selected'";?>>5 stars</option>
        
        <option value="4" <?php if($review_rating['rating'][$j]=="4")echo "selected='selected'";?>>4 stars</option>
        
        <option value="3" <?php if($review_rating['rating'][$j]=="3")echo "selected='selected'";?>>3 stars</option>
        
        <option value="2" <?php if($review_rating['rating'][$j]=="2")echo "selected='selected'";?>>2 stars</option>
        
        <option value="1" <?php if($review_rating['rating'][$j]=="1")echo "selected='selected'";?>>1 star</option>
        
    </select>
      </td>
      <td>
      <img style="cursor: pointer;" src='<?php echo TEMPLUTO_URI; ?>/lib/images/delete.gif' class='deleterow' rel='rating_<?php echo $counter;$counter++;?>' title='Delete this row' />
      </td>
      </tr>
       <?php
            }
        }else{
            ?>
            <tr class="rating_<?php echo $counter;?>">
      <td class="frow">

                
               
        <input name="review_rating[concept][]" value="" style="padding:3px 10px;width:100%;" type="text">
   
      </td>
      <td>
      
   <select name="review_rating[rating][]">
        <option value="5">5 stars</option>
        
        <option value="4">4 stars</option>
        
        <option value="3">3 stars</option>
        
        <option value="2">2 stars</option>
        
        <option value="1">1 star</option>
        
    </select>
      </td>
      <td>
      <img style="cursor: pointer;" src='<?php echo TEMPLUTO_URI; ?>/lib/images/delete.gif' class='deleterow' rel='rating_<?php echo $counter;$counter++;?>' title='Delete this row' />
      </td>
      </tr>
            <?php
           
        }?>
      </tbody>
      </table> 
      
      
      </td><td valign="top"></td></tr>
 <tr><td><br/><a href="#" class="add-concept button-secondary" id="addrow">Add Feature</a>  </td><td></td></tr>
 
 </table>
   
    
    <br> <br>
    
    
    <script language="JavaScript">
    <!--
    var counter=<?php echo ($counter);?>;
    //alert(counter);
    function trim(str) {
        return str.replace(/^\s+|\s+$/g,"");
    }
    
      
      
      jQuery('#addrow').click(function(){
          
          var feat="";
          var tmp_fid=0;
          /*feat=prompt("Enter Feature");   //alert(feat); 
          feat=trim(feat);  
          while(feat.length==0 ){
               feat=prompt("Enter Feature");
               feat=trim(feat);    
          }
          var tmp_fid = "ftr_"+new Date().getTime();*/
          $ftr_info = "<span id='sf"+tmp_fid+"'>"+feat+"</span><input type=hidden name='feature_name["+tmp_fid+"]' value='"+feat+"'/>"; 
          
           jQuery('#ratingtable tbody tr:last').clone(true).insertAfter('#ratingtable tbody tr:last');
           jQuery('#ratingtable tbody tr:last').attr("class","rating_"+counter);
           jQuery("#ratingtable tbody tr:last").find("img").attr("rel","rating_"+counter);   
           jQuery("#ratingtable tbody tr:last td:first").find("input").val("");   
           counter++; 
           /*
           var ht="";
           
           jQuery("#ratingtable tbody tr:last").find("td").each(function() {
               
               
               var ccl,pos1;
               var nclassname="";
               ccl=jQuery(this).attr("class");
               ccl=trim(new String(ccl));
               
               pos1= ccl.indexOf(" ");
               
               if(pos1 != -1){
                  nclassname=ccl.substr(0,pos1+1);                   
               }
               nclassname += tmp_fid;
               
               jQuery(this).attr("class",nclassname);
               ht= jQuery(this).find('input').attr('name');
               ht=new String(ht); 
               if(ht != "undefined"){
                   var pos= ht.indexOf("]");  
                   var cnam=ht.substr(0,pos+1);
                   var nnam=cnam+"["+tmp_fid+"]"; 
                   jQuery(this).find('input').attr("name",nnam);
                   jQuery(this).find('input').attr("id",nnam);
                   
               } 
               
           });
           jQuery('#ratingtable tbody tr:last td:first').html($ftr_info); 
           jQuery('#ratingtable tbody tr:last td:first').css("font-weight","bold");   
           jQuery('#ratingtable tbody tr:last td:first').append('<img rel="sf'+tmp_fid+'"  id="e'+tmp_fid+'" class="feature-edit" title="click here to edit" src="<?php echo plugins_url();?>/pricing-table/images/edit.png"><img src="<?php echo plugins_url();?>/pricing-table/images/delete.png" class="deleterow" title="Delete this row" />');
           jQuery('#ratingtable tbody tr:last td:first').attr("class",tmp_fid);
           jQuery('#ratingtable tbody tr:last').attr("class",tmp_fid);
           jQuery('#ratingtable tbody tr:last td:first .deleterow').attr("rel",tmp_fid);
           */
           return false;    
      });
      
      jQuery('.deleterow').live('click', function() {   
        if(confirm("Are you sure you want to delete?")){
                
                jQuery("."+jQuery(this).attr('rel')).slideUp(function(){jQuery(this).remove();});
             
        }
     });
 
 
    //-->
    </script>
    