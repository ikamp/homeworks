function Calculator(){
	this.screenElement = document.getElementById("display");
	this.screen = [];

	this.update = function(){
		var output = '';

		for(digit in this.screen){
			output+= this.screen[digit];
		}

		this.screenElement.value = output;

	}

	this.addToScreen = function(value){
		var lastElement = this.screen[this.screen.length-1];

		if(value == 'c'){
			if(lastElement.length > 1){
				lastElement.splice(lastElement.length-1, 1);
			}else{
				this.screen.splice(this.screen.length-1, 1);
			}
		}else if(value == '.'){
			this.screen[this.screen.length-1]+=value;
		}else if(parseFloat(value) && parseFloat(this.screen[this.screen.length-1])){
			this.screen[this.screen.length-1]+=value;
		}else{
			if(value != lastElement){
				this.screen.push(value);
			}
		}

		this.update();
	}

	this.clean = function(){
		this.screen = [];
		this.update();
	}

	this.power = function(){
		this.screen[this.screen.length-1] = this.screen[this.screen.length-1]*this.screen[this.screen.length-1];
		this.update();
	}

	this.equal = function(){
		var output = 0;
		var lastFunction = '';

		for(digit in this.screen){
			part = this.screen[digit];

			if(!parseFloat(part)){
				lastFunction = part;
			}else{
				if(lastFunction == ''){
					output = parseFloat(part);
				}else if(lastFunction == '+'){
					output+=parseFloat(part);
				}else if(lastFunction == '-'){
					output-=parseFloat(part);
				}else if(lastFunction == '/'){
					output/=parseFloat(part);
				}else if(lastFunction == '*'){
					output*=parseFloat(part);
				}
			}
		}

		this.screenElement.value = output;
	}
}