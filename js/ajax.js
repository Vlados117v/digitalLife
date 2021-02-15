		$(document).ready(function () { 
			$("#nameError").hide(); 
			$("#characteristicError").hide(); 
			$("#moodError").hide(); 
			$("#fatalError").hide();

			$('#addUser').click(function () {
				$("#nameError").hide(); 
				$("#characteristicError").hide(); 
				$("#moodError").hide(); 
				$("#fatalError").hide();
				var name = $('#name').val();
				var sex = $('#sex').val();
				var characteristic = $('#characteristic').val();
				var mood = $(".mood:checked").val(); 

				if (name.length<3 || name.length>11 || name == "") {
					$("#nameError").show();
					return;
				} else if (characteristic == "") {
					$("#characteristicError").show();
					return;
				} else if (mood == undefined) {
					$("#moodError").show();
					return;
				} 
				console.log(mood);
				$.ajax({
					url: 'phpBlocks/saveUser.php',
					type: 'POST',
					data: {name : name,sex : sex, mood : mood,characteristic : characteristic},
					success: function(data) {
						if (data == 'ошибка') {
							$("#fatalError").show();
							return
						}
						$(".table").append(data);
					}
				});
			});
		});