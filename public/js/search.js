
  //  function search(event) {
  //   event.preventDefault();
  //   var a = document.getElementById("minSurface")
  //       var b = document.getElementById("maxPrice")
  //       const c = a.value;
  //       const d = b.value;
  //       const url = "/search?minSurface="+c+"&maxPrice="+d;
  //   return axios.get(url).then(response => {
  //     // returning the data here allows the caller to get it through another .then(...)
  //     document.getElementById("container mt-5").innerHTML= response.data;
      
  //   })
  // }

   function search(event) {
    event.preventDefault();
    
        const url = this.href;
        console.log(url);
        var spanCount = this.querySelector("span.js-likes")
        const icone = this.querySelector('i.fa-heart')
    return axios.get(url).then(response => {
      // returning the data here allows the caller to get it through another .then(...)
      
      
      spanCount.textContent = response.data 
      if(icone.classList.contains('fas')){
        icone.classList.replace('fas','far');
      }
      
      else if (icone.classList.contains('far')) icone.classList.replace('far','fas');
      
      
      
    })
  }


document.querySelectorAll('a.like').forEach(function(link){
    link.addEventListener("click",search);
})





// $(document).ready(function(){
//     $('#clear').click(function(){
//         if(!confirm('Are you sure you want to clear chat?'))
//             return false;
//         $.ajax({
//             url:'chat/chat.php',
//             data:{username:"<?php echo $_SESSION['username'] ?>",ajaxclear:true},
//             method:'post',
//             success:function(data){
//                 $('#result').html(data);
//             }
//         })
//     })
// })