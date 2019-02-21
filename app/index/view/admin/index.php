<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="./assets/css/datatables.css" type="text/css" media="all" />
</head>
<style>
.up, .down {
	cursor: pointer;
}

.up:after {
	content: '^';
	display: block;
}

.down:after {
	content: '^';
	transform: rotate(180deg);
	display: block;
}

.icon {
	display: inline-block;
}
</style>
<body>
	<table class="table">
		<?php if (!empty($data)){?>
		<thead>
			<tr>
				<th>
					<span>id</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>name</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>username</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>email</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>address</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>phone</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>website</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
				<th>
					<span>company</span>
					<span class="icon">
						<i class="up"></i>
						<i class="down"></i>
					</span>
				</th>
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
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript">
	$('.icon').on('click','.up',function(){
		var field = $(this).parents('th').find('span:eq(0)').html();
		var order = 'asc';
		window.location = 'index.php?c=admin&a=index&field='+field+'&order='+order;
	}).on('click','.down',function(){
		var field = $(this).parents('th').find('span:eq(0)').html();
		var order = 'desc';
		window.location = 'index.php?c=admin&a=index&field='+field+'&order='+order;
	});
	</script>
</body>
</html>