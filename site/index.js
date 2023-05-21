// let img = document.querySelector("img");
/*  let btn = document.querySelector("button");

async function getNewDogImg() {
  let response = await fetch("https://random.dog/woof.json"); 
  let data = await response.json(); 
}

btn.addEventListener("click", () => {
  getNewDogImg(); 
});

getNewDogImg();*/




async function ara(){
    let api="https://random.dog/woof.json";
    const res=await fetch(api);
    const data=await res.json();
    let veri=data.results[0];
    console.log(veri);
}



