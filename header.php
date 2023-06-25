<?php
?>
<html><head>
        <style>
                #n{
		background-color: black;}
		#main { color: white;
		text-align: right;}
		th{font-size: 30px;}
		#main a{color: white;
		font-size: 20px;
		padding: 30px;}
		#main a:hover{ color: gray;}
		#main a{color: white;
		text-align: right;}
                #searchlnput{
                    font-size:16px;
                    padding:10px 24px ; 
                    border-radius: 30%;
                }
                #searchlnput:hover {
                    background-color:#ccccff;
                }
                #logo{
                    width:30px;
                }
        </style>
        <script>
				   function search() {
			  var input = document.getElementById('searchInput').value.toLowerCase();
			  var results = document.getElementById('searchResults');
			  results.innerHTML = '';

			  var paragraphs = document.getElementsByTagName('p');

			  for (var i = 0; i < paragraphs.length; i++) {
				var paragraphText = paragraphs[i].innerText.toLowerCase();
				if (paragraphText.includes(input)) {
				  var li = document.createElement('li');
				  var link = document.createElement('a');
				  link.innerText = paragraphs[i].innerText;
				  li.appendChild(link);
				  results.appendChild(li);
				}
			  }
			}
			   document.getElementById('searchInput').addEventListener('input', search);
				
	</script>
    </head>
<body>
        <div id="n">
        <table id="main">
        <tr>
        <th>
        <img class="logo" src="111.jpg"/>
        </th>
        <td width="2%"></td>
        <td colspan=7>

        <input type="text" id="searchlnput" placeholder="Search...">
           <ul id="serchResults"></ul>
        </td>
        <td width="40%"> </td>

        <td><a href="registertrans.php">Register</a></td>
        <td><a href="">Join Us</a></td>
        </tr>
        </table> 
        </div>
</body>
</html>
