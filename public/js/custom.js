const statu = document.getElementsByClassName("status");
console.log(statu);
//statu list of classe not an array but we transform it to an array with the from method
Array.from(statu).forEach((stat) => {
    console.log(stat);
    if (stat.innerText === "pending") {
        stat.style.color = "orange";
        stat.style.fontWeight = "600";
    }
});
