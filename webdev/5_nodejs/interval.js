let delay, counter = 0;

const delayedInterval = (delay) => {
    setInterval(() => {
        console.log(`Hello World. ${counter++}`);
        delay++;
    }, delay * 1000);
};

delayedInterval(delay);
