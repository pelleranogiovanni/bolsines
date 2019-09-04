$("#categoria").change(event => {
	$.get(`candidatos/${event.target.value}`, function(res, sta){
		$("#candidato").empty();
		res.forEach(element => {
			$("#candidato").append(`<option value=${element.id}> ${element.candidato} </option>`);
		});
	});
});
