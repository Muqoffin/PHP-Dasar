function tampilDeskripsi(e){var t=null;if(window.XMLHttpRequest){t=new XMLHttpRequest}else{t=new ActiveXObject("Microsoft.XMLHTTP")}if(t===null){alert("browser tidak mendukung ajax!");return}t.onreadystatechange=function(){if(t.readyState==4&&t.status==200){document.getElementById("container").innerHTML=t.responseText}};t.open("GET","detail_film.php?id="+e,true);t.send()}var huruf=document.getElementById("film"),button=document.getElementById("pilih");button.style.display="none";huruf.onchange=function(e){var t=null;if(window.XMLHttpRequest){t=new XMLHttpRequest}else{t=new ActiveXObject("Microsoft.XMLHTTP")}if(t===null){alert("browser tidak mendukung ajax!");return}t.onreadystatechange=function(){if(t.readyState==4&&t.status==200){document.getElementById("container").innerHTML=t.responseText}};t.open("POST","daftar_film.php",true);t.setRequestHeader("Content-type","application/x-www-form-urlencoded");t.send("huruf="+huruf.value);e.preventDefault()}