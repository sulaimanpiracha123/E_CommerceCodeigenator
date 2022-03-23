$(document).on('submit','.database_operation',function(){
    let url = $(this).attr('action');
   let data = $(this).serialize();
    //console.log(data);

    $.post(url,data,function(fb){console.log(fb);
        var resp = jQuery.parseJSON(fb);
        console.log(resp);
        if(resp.status=='true')
        {
            alert(resp.message);
            window.location.href= resp.reload;

        }
        else
        {
            alert(resp.message);
        }
    
    })
    return false;
})
$(document).on('change','.manage_user_status',function()
{
    var id = $(this).attr('data-id');
    var status = $('input[id="status'+id+'"]:checked').val();
    if(status==undefined)
    {
      status = 0;

    }
   $.post(base_url+'index.php/Users/manage_status',{id:id,status:status},function(fb){
        alert('Status Succcessfully Changed')
    })

}); 

    $(document).on('change','.manage_Sub_cat_status',function()
{
    var id = $(this).attr('data-id');
    var status = $('input[id="Status'+id+'"]:checked').val();
    if(status==undefined)
    {
      status = 0;

    }
   $.post(base_url+'index.php/Products/manage_Sub_cat_status',{id:id,status:Status},function(fb){
        alert('Status Succcessfully Changed')
   });
    });


    $(document).on('submit','.Add_new_product',function(){
       
       var url = $(this).attr('action');
       var data = new FormData($(this)[0]);
       $.ajax({
           type:'POST',
           url:url,
           data:data,
           contentType:false,
           processData:false,
           success:function(fb)
           {
               //console.log(fb);
               var resp =$.parseJSON(fb);
               console.log(resp.reload);

               if(resp.Status=='true')
               {
                location.assign(resp.reload);
    

               }
               else
               {
                alert(resp.message);

               }
           }
       });
       return false
    });  
       