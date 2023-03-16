function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var form = document.getElementById("form");
form.addEventListener("submit", function (event){
    event.preventDefault();

    var u_breed = document.getElementById("breedInfo").value;
    var u_weight = document.getElementById("dog_weight").value;
    var u_age = document.getElementById("dog_age").value;



    let weight = JSON.parse(getCookie('weight'));
    let breed = JSON.parse(getCookie('breed'));

    
    var index;

      for(index = 0; index <weight.length; index++) {
    if (breed[index] == u_breed){
        break;
    }
  }

let str = "Your dog is a " + u_breed;
console.log(parseInt(weight[index]), '>', parseInt(u_weight));
  if (parseInt(weight[index]) > parseInt(u_weight) ){
        str += ", it is small,";
  } else {
    str += ", it is large,";
  }

  str += "and it age is " + u_age;

    // let str = "";

    // switch (breed) {
    //     case 'labrador':
    //         str += "Your dog is a Labrador";
    //         switch (weight) {
    //             case 'small':
    //                 str += ", it is small,";
    //                 break;
    //             case 'medium':
    //                 str += ", it is medium,";
    //                 break;
    //             case 'large':
    //                 str += ", it is large,";
    //                 break;
    //             default:
    //                 str += ", the size was not given, ";
    //         }
    //         break;
    //     case 'french_bulldog':
    //         str += "Your dog is a French Bulldog";
    //         switch (weight) {
    //             case 'small':
    //                 str += ", it is small,";
    //                 break;
    //             case 'medium':
    //                 str += ", it is medium,";
    //                 break;
    //             case 'large':
    //                 str += ", it is large,";
    //                 break;
    //             default:
    //                 str += ", the size was not given, ";
    //         }
    //         break;
    //     case 'border_collie':
    //         str += "Your dog is a Border Collie";
    //         switch (weight) {
    //             case 'small':
    //                 str += ", it is small,";
    //                 break;
    //             case 'medium':
    //                 str += ", it is medium,";
    //                 break;
    //             case 'large':
    //                 str += ", it is large,";
    //                 break;
    //             default:
    //                 str += ", the size was not given, ";
    //         }
    //         break;
    //     case 'golden_retriever':
    //         str += "Your dog is a Golden Retriever";
    //         switch (weight) {
    //             case 'small':
    //                 str += ", it is small,";
    //                 break;
    //             case 'medium':
    //                 str += ", it is medium,";
    //                 break;
    //             case 'large':
    //                 str += ", it is large,";
    //                 break;
    //             default:
    //                 str += ", the size was not given, ";
    //         }
    //         break;
    //     default:
    //         console.log(`Please add your dog's information.`);
    // }

    // switch (age) {
    //     case 'puppy':
    //         str += " and it is a puppy." ;
    //         console.log(str);
    //         break;
    //     case 'young_adult':
    //         str += " and it is a young adult.";
    //         console.log(str);
    //         break;
    //     case 'adult':
    //         str += " and it is an adult.";
    //         console.log(str);
    //         break;
    //     case 'senior':
    //         str += " and it is a senior.";
    //         console.log(str);
    //         break;
    //     default:
    //         str += " and its age is unknown.";
    //         console.log(str);
    // }
    var words = document.getElementById("form");
    words.innerHTML = str;
    words.style.color ='black';
    words.style.fontSize = "46px";


})
