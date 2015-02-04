{include file="head.tpl"}
{include file="modal1.tpl"}
{include file="modal2.tpl"}
{include file="modal3.tpl"}

<body class="index">
	<div class="box">
		<table class="table table-hover">
		<thead>
			<th> Medico General </th>
			<th> Consultorio </th>
			<th> Medico Infantil </th>
			<th> Consultorio </th>
			<th> Medico Terapia </th>
			<th> Consultorio </th>
			<th> Fecha </th>
		</thead>
		{foreach $lista as $datos}
			<tbody>
				<td> {$datos.mgeneral} </td>
				<td> {$datos.consultoriomg} </td>
				<td> {$datos.mpediatria} </td>
				<td> {$datos.consultoriomp} </td>
				<td> {$datos.mterapia} </td>
				<td> {$datos.consultoriomt} </td>
				<td> {$datos.fecha} </td>
			</tbody>
		{foreachelse}
			<tbody>
				<td> <p> No se registraron guardias hasta el momento </p> </td>
			</tbody>
		{/foreach}
		</table>
	</div>
</body>