async function deletegallery(id){
    if (confirm("Are you sure delete this post?") == true) {
    const response = await fetch('./src/delete_gallery.php', {
        method: 'POST', 
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({id:id})
      });
      const res=await response.json()
      if(res.status=='ok'){
       window.location.reload();
      }
      else{
        alert("Post not found")
      }
    }
}
async function deleteeasonaldeals(id){
    if (confirm("Are you sure delete this post?") == true) {
    const response = await fetch('./src/delete-seasonal-deals.php', {
        method: 'POST', 
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({id:id})
      });
      const res=await response.json()
      if(res.status=='ok'){
       window.location.reload();
      }
      else{
        alert("Post not found")
      }
    }
}