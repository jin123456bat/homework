<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="./assets/css/datatables.css" type="text/css" media="all" />
</head>
<body>
	<table class="table">
		<?php if (!empty($data)){?>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>username</th>
				<th>email</th>
				<th>address</th>
				<th>phone</th>
				<th>website</th>
				<th>company</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $r){?>
			<tr>
				<td><?=$r['id']?></td>
				<td><?=$r['name']?></td>
				<td><?=$r['username']?></td>
				<td><?=$r['email']?></td>
				<td>
					<div>street:<?=$r['address']['street']?></div>
					<div>suite:<?=$r['address']['suite']?></div>
					<div>city:<?=$r['address']['city']?></div>
					<div>zipcode:<?=$r['address']['zipcode']?></div>
				</td>
				<td><?=$r['phone']?></td>
				<td><?=$r['website']?></td>
				<td>
					<div>name:<?=$r['company']['name']?></div>
					<div>catchPhrase:<?=$r['company']['catchPhrase']?></div>
					<div>bs:<?=$r['company']['bs']?></div>
				</td>
			</tr>
			<?php }?>
		</tbody>
		<?php }?>
	</table>
</body>
</html>