
// const Active = {
//     finance: document.querySelectorAll('.finance-predic-item'),
//     work: document.querySelectorAll('.work-predic-item'),
//     luck: document.querySelectorAll('.luck-predic-item'),
//     love: document.querySelectorAll('.love-predic-item'),
//     health: document.querySelectorAll('.health-predic-item'),
//     speech: document.querySelectorAll('.speech-predic-item'),
//     mind: document.querySelectorAll('.mind-predic-item'),
//     charm: document.querySelectorAll('.charm-predic-item'),
//     personality: document.querySelectorAll('.personality-predic-item'),
//     learn: document.querySelectorAll('.learn-predic-item'),
//     kudog: document.querySelectorAll('.kudog-predic-item'),
// };
let Finance_act = document.querySelectorAll('.finance-predic-item');
Finance_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
            // Finance_act.forEach((el) => el.classList.remove('active-predic'));
            // Finance_act.forEach((el) => (el.querySelector('img').style.display = "none"));
        } else {
            // act.classList.add('active-predic');
            act.querySelector('img').style.display = "none";
            // Finance_act.forEach((el) => (el.querySelector('img').style.display = "none"));
            // Finance_act.forEach((el) => (el.querySelector('img').style.display = "block"));
        }
    })
});
let work_act = document.querySelectorAll('.work-predic-item');
work_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});

let luck_act = document.querySelectorAll('.luck-predic-item');
luck_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let love_act = document.querySelectorAll('.love-predic-item');
love_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});

let health_act = document.querySelectorAll('.health-predic-item');
health_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let speech_act = document.querySelectorAll('.speech-predic-item');
speech_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});

let mind_act = document.querySelectorAll('.mind-predic-item');
mind_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let charm_act = document.querySelectorAll('.charm-predic-item');
charm_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let personality_act = document.querySelectorAll('.personality-predic-item');
personality_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let learn_act = document.querySelectorAll('.learn-predic-item');
learn_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});
let kudog_act = document.querySelectorAll('.kudog-predic-item');
kudog_act.forEach((act) => {
    act.addEventListener('click', () => {
        act.classList.toggle('active-predic');
        if (act.classList.contains('active-predic')) {
            act.querySelector('img').style.display = "block";
        } else {
            act.querySelector('img').style.display = "none";
        }
    });
});