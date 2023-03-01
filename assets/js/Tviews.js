
const view1 = document.getElementById("view1");
const view2 = document.getElementById("view2");
const view3 = document.getElementById("view3");
const view4 = document.getElementById("view4");

const head1 = document.getElementById("head1");
const head2 = document.getElementById("head2");
const head3 = document.getElementById("head3");
const head4 = document.getElementById("head4");

const views = document.getElementById("views");
const viewBtn = document.getElementById("view-btn");

let viewArr = [view1, view2, view3, view4];
let headArr = [head1, head2, head3, head4];

function change_view(){

    switch(views.value){
        case "view1":
            head1.classList.remove("header__off");
            view1.classList.remove("view__off");
            
            for(let i = 0; i<= 3; i++){

                if(i != 0){
                    headArr[i].classList.add("header__off");
                    viewArr[i].classList.add("view__off");
            
                }
            }
            break;
            
        case "view2":
                head2.classList.remove("header__off");
                view2.classList.remove("view__off");
            for(let i = 0; i<= 3; i++){

                if(i != 1){
                    headArr[i].classList.add("header__off");
                    viewArr[i].classList.add("view__off");
            
                }
            }
            break;
            
        case "view3":
                head3.classList.remove("header__off");
                view3.classList.remove("view__off");
            
                for(let i = 0; i<= 3; i++){

                    if(i != 2){
                        headArr[i].classList.add("header__off");
                        viewArr[i].classList.add("view__off");
                
                    }
                }
            break;

        case "view4":
                head4.classList.remove("header__off");
                view4.classList.remove("view__off");
                
                for(let i = 0; i<= 3; i++){
    
                    if(i != 3){
                        headArr[i].classList.add("header__off");
                        viewArr[i].classList.add("view__off");
                
                    }
                }
            break;
        }

}