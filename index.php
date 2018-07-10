<?php
setcookie("name","value",time()+10000);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	td {
		border: 1px solid black;
		padding: 4px;
	}
</style>
<title></title>
</head>
<body>

	<h1>Dashboard</h1>
	<table>
		<tr id = "wins-title">
			<td><b>Wins: </b></td>
			<td id = "wins"></td>
		</tr>
		<tr id = "losses-title">
			<td><b>Losses: </b></td>
			<td id = "losses"></td>
		</tr>
		<tr id = "place-title">
			<td><b>Place: </b></td>
			<td id = "place"></td>
		</tr>
		<tr id = "target-title">
			<td><b>Target: </b></td>
			<td id = "target"></td>
		</tr>
		<tr id = "buttons-title">
			<td><button>b1</button></td>
			<td><button>b2</button></td>
		</tr>
	</table>
	<script>
		// var x = 1;
		// function get(xd) {
		// 	return new Promise(resolve => setTimeout(resolve,xd));
		// }
		// async function xdddd() {
		// 	while(true) {
		// 		document.write("<br>");
		// 		await sleep(50);
		// 	}
		// }
		
		// async function xddd() {
		// 	while(true) {
		// 		document.write(x);
		// 		x++;
		// 		await sleep(1);
		// 	}
		// }
		// xdddd();
		// xddd();
		var i = 0;
		async function sleep(time) {
			return new Promise(resolve => setTimeout(resolve, time))
		}
		async function f() {
			while(true) {
				const uri = "http://localhost:1337/ex";
				var param = {method : "POST", credentials: 'same-origin', body: '{"user": "test", "pass": "root"}', headers : {'Cookie': readCookie('name')}};

				await sleep(5000);
				debugger;
				document.getElementById('losses').innerHTML = i;
				i++;
				fetch(uri, param).then(function(res) {
					debugger;
					return res.text();
				}).catch(function(err) {
					debugger;
					console.log(err);
				}).then(function(data) {
					debugger;
					document.getElementById('wins').innerHTML = data;
				}).catch(function(err) {
					debugger;
					console.log(err);
				});
				document.getElementById('place').innerHTML = 'done fetching'
			}
		}
		function readCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}
		f();
	</script>
	
</body>
</html>