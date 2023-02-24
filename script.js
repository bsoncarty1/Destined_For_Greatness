var form = document.getElementById("form");
form.addEventListener("submit", function (event){
    event.preventDefault();

    var breed = document.getElementById("breedInfo").value;
    var weight = document.getElementById("dogWeight").value;
    var age = document.getElementById("dogAge").value;

    switch (breed) {
        case 'labrador':
            console.log("The dog is a Labrador");
            switch (weight) {
                case 'small':
                    console.log("and it is small");
                    break;
                case 'medium':
                    console.log("and it is medium");
                    break;
                case 'large':
                    console.log("and it is large");
                    break;
                default:
                    console.log("size not given.");
            }
            break;
        case 'french_bulldog':
            console.log("The dog is a French Bulldog");
            switch (weight) {
                case 'small':
                    console.log("and it is small");
                    break;
                case 'medium':
                    console.log("and it is medium");
                    break;
                case 'large':
                    console.log("and it is large");
                    break;
                default:
                    console.log("size not given.");
            }
            break;
        case 'border_collie':
            console.log("The dog is a Border Collie");
            switch (weight) {
                case 'small':
                    console.log("and it is small");
                    break;
                case 'medium':
                    console.log("and it is medium");
                    break;
                case 'large':
                    console.log("and it is large");
                    break;
                default:
                    console.log("size not given.");
            }
            break;
        case 'golden_retriever':
            console.log("The dog is a Golden Retriever");
            switch (weight) {
                case 'small':
                    console.log("and it is small");
                    break;
                case 'medium':
                    console.log("and it is medium");
                    break;
                case 'large':
                    console.log("and it is large");
                    break;
                default:
                    console.log("size not given.");
            }
            break;
        default:
            console.log(`Please add your dog's information.`);
    }

    switch (age) {
        case 'puppy':
            console.log("and it is a puppy.");
            break;
        case 'young_adult':
            console.log("and it is a young adult.");
            break;
        case 'adult':
            console.log("and it is an adult.");
            break;
        case 'senior':
            console.log("and it is a senior.");
            break;
        default:
            console.log("age is unknown.")
    }

})
