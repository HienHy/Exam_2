<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="/assets/lib/easing/easing.min.js"></script>
<script src="/assets/lib/slick/slick.min.js"></script>


<!-- Template Javascript -->
<script src="/assets/js/main.js"></script>

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
             'user_id':
         } ,
          success:(rp)=>{
             if(rp.data){

             }
             console.log(rq)
          }
      })
}


</script>

