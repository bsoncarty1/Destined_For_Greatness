var form = document.getElementById("form");
form.addEventListener("submit", function (event){
    event.preventDefault();

    var breed = document.getElementById("breedInfo").value;
    var weight = document.getElementById("dogWeight").value;
    var age = document.getElementById("dogAge").value;

    let str = "";

    switch (breed) {
        case 'labrador':
            str += "Your dog is a Labrador";
            switch (weight) {
                case 'small':
                    str += ", it is small,";
                    break;
                case 'medium':
                    str += ", it is medium,";
                    break;
                case 'large':
                    str += ", it is large,";
                    break;
                default:
                    str += ", the size was not given, ";
            }
            break;
        case 'french_bulldog':
            str += "Your dog is a French Bulldog";
            switch (weight) {
                case 'small':
                    str += ", it is small,";
                    break;
                case 'medium':
                    str += ", it is medium,";
                    break;
                case 'large':
                    str += ", it is large,";
                    break;
                default:
                    str += ", the size was not given, ";
            }
            break;
        case 'border_collie':
            str += "Your dog is a Border Collie";
            switch (weight) {
                case 'small':
                    str += ", it is small,";
                    break;
                case 'medium':
                    str += ", it is medium,";
                    break;
                case 'large':
                    str += ", it is large,";
                    break;
                default:
                    str += ", the size was not given, ";
            }
            break;
        case 'golden_retriever':
            str += "Your dog is a Golden Retriever";
            switch (weight) {
                case 'small':
                    str += ", it is small,";
                    break;
                case 'medium':
                    str += ", it is medium,";
                    break;
                case 'large':
                    str += ", it is large,";
                    break;
                default:
                    str += ", the size was not given, ";
            }
            break;
        default:
            console.log(`Please add your dog's information.`);
    }

    switch (age) {
        case 'puppy':
            str += " and it is a puppy." ;
            console.log(str);
            break;
        case 'young_adult':
            str += " and it is a young adult.";
            console.log(str);
            break;
        case 'adult':
            str += " and it is an adult.";
            console.log(str);
            break;
        case 'senior':
            str += " and it is a senior.";
            console.log(str);
            break;
        default:
            str += " and its age is unknown.";
            console.log(str);
    }
    var words = document.getElementById("form");
    words.innerHTML = str;
    words.style.color ='black';
    words.style.fontSize = "46px";


})
