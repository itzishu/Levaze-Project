// const search = () =>{
//     const searchbox = document.getElementById("search-input").value.toUpperCase();
//     const storeitems = document.querySelectorAll("section");
//     const product = document.querySelectorAll(".containers");

//     for(var i = 0; i < storeitems.length; i++) {
//         let textContent = storeitems[i].textContent.toUpperCase();
//         let index = textContent.indexOf(searchbox);

//         if(index !== -1){
//             let highlightedContent = storeitems[i].textContent;
//             highlightedContent = highlightedContent.substring(0, index) + "<span class='highlight'>" + highlightedContent.substring(index, index + searchbox.length) + "</span>" + highlightedContent.substring(index + searchbox.length);
//             product[i].innerHTML = highlightedContent;
//             product[i].style.display = "";
//         } else {
//             product[i].style.display = "none";
//         }
//     }
// }
