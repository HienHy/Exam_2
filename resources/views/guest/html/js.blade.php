<!-- JavaScript Libraries -->
<!-- Core JavaScript
 ================================================== -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/tether.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/custom.js"></script>


<!-- Template Javascript -->

<script>
    let comment= $('#content');

    let click=$('#click-comment');
    click.on('click',()=>{
        confirm(comment.val());
    })

let a = async ()=>{
      $.ajax({
         url:"{{route('test.ajax')}}",
         type:"post",
         data:{
             '_token':'{{csrf_token()}}',
             'data':comment.val(),
         } ,
          success:(rp)=>{
             if(rp.data){

             }
             console.log(rq)
          }
      })
}


</script>

