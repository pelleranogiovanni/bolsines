//dropdown para escuelas y mesas
$("#escuela").change(event => {
	$.get(`mesas2/${event.target.value}`, function(res, sta){
		$("#mesa").empty();
		res.forEach(element => {
			$("#mesa").append(`<option value=${element.id}> ${element.numero} </option>`);
		});
	});
});


//dropdown para categorias y candidatos
$("#categoria").change(event => {
	$.get(`candidatos/${event.target.value}`, function(res, sta){
		$("#candidato").empty();
		res.forEach(element => {
			$("#candidato").append(`<option value=${element.id}> ${element.candidato} </option>`);
		});
	});
});



