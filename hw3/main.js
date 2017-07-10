    var process = new Calculator();
    var element = new Elements();  

    document.body.addEventListener("click", function(event) {
    if(event.target.textContent == "Ans"){
           element.getElements("text").value += process.getTotal();
    	
	} else if(event.target.textContent == "Del"){
           element.getElements("text").value = 0;    
	}
        else document.getElementById("text").value += event.target.textContent;
	
     });

    element.getElements("sum").addEventListener("click",run);

    window.addEventListener("keydown", function(event) {
        
	if(event.key == "Enter"){
            console.log(event.key);
 	    run();      
	
        }else if(event.key == "Backspace"){
 	    var currentContext = element.getElements("text").value;
            currentContext = currentContext.slice(0, -1);
            element.getElements("text").value = currentContext;	
	
	}else{
 	    element.getElements("text").value += event.key;	
	}

    });


    function run(){

        var content = element.getElements("text").value;
        var array = Array.from(content);
        console.log(array);
	var operations = content.match(/\+|\-|\*|\/|pow|\%/g);
        console.log(operations);
        var inneroperations = content.match(/\*|\/|pow|\%/g);
        console.log(inneroperations);
        var tempNumbers = content.match(/\d*(\+|\-|\*|\/|pow|\%)\d*/g);
	console.log(tempNumbers.toString());
	var numbers = tempNumbers.toString().match(/\d+/g);
	console.log(numbers);

	while(operations.length != 0)
		{
			if(inneroperations == null){
				var count=0;
			}else{
				count = operations.length;
			}

			while(count != 0 ){
		           	
				for(var i=0;i<operations.length;i++){
					console.log("for");
					while(operations[i] == "*" | operations[i] == "/" | operations[i] == "pow" | operations[i] == "%")
						{ 
							console.log("while");
					   		if(operations[i] == "*" ){
							
								var sum = process.multiply(numbers[i],numbers[i+1]);
								numbers.splice(i,2,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
							}else if(operations[i] == "/"){
							
								var sum = process.divide(numbers[i],numbers[i+1]);
								numbers.splice(i,2,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
							}else if(operations[i] == "pow"){
							
								var sum = process.poww(numbers[i],numbers[i+1]);
								numbers.splice(i,2,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
							}else if(operations[i] == "%"){
							
								var sum = process.percent(numbers[i]);
								numbers.splice(i,1,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
							}
					    
						}
				    	}
				count--;
                               	}
                                for(var i=0;i<operations.length;i++)
				{
					while(operations[i] == "+" | operations[i] == "-" )
						{ 
							console.log("while");
							if(operations[i] == "+"  ){
							
								var sum = process.add(numbers[i],numbers[i+1]);
								numbers.splice(i,2,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
						 	}else if(operations[i] == "-"){
							
								var sum = process.subtract(numbers[i],numbers[i+1]);
								numbers.splice(i,2,sum);
                                                        	console.log(numbers);
                                                        	operations.splice(i,1);
								console.log(operations);
								console.log(numbers);
								process.total(numbers);
							}
					    
						}	

				}

	
			}
		
	document.getElementById("text").value=process.total(numbers);
    }


