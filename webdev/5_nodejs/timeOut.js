const func = () => {
    console.log(`print after ${delay} seconds`);
}

let delay = 2;

const rocks = who => {
    console.log(who + " rocks");
}

setTimeout(func, (delay + 2) * 1000);
setTimeout(rocks, delay * 1000, "Bhavik");
