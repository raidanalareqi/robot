// robot3d.js - Adds dynamic and interactive effects to the 3D robot

document.addEventListener('DOMContentLoaded', function() {
    const robot = document.querySelector('.robot-3d');
    const buttons = document.querySelectorAll('.motor-form-3d button');
    const leftArm = document.querySelector('.robot-arm.left');
    const rightArm = document.querySelector('.robot-arm.right');
    const leftLeg = document.querySelector('.robot-leg.left');
    const rightLeg = document.querySelector('.robot-leg.right');
    const head = document.querySelector('.robot-head');

    // Animate robot parts on button click
    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Remove previous animation classes
            robot.classList.remove('move-up', 'move-down', 'move-left', 'move-right', 'move-forward', 'move-backward', 'stop');
            // Reset all parts
            leftArm.style.transform = '';
            rightArm.style.transform = '';
            leftLeg.style.transform = '';
            rightLeg.style.transform = '';
            head.style.transform = '';
            // Add animation class based on action
            switch(btn.value) {
                case 'up':
                    robot.classList.add('move-up');
                    leftArm.style.transform = 'rotate(-60deg) translateY(-20px)';
                    rightArm.style.transform = 'rotate(60deg) translateY(-20px)';
                    head.style.transform = 'translateY(-10px) scale(1.05)';
                    break;
                case 'down':
                    robot.classList.add('move-down');
                    leftLeg.style.transform = 'rotate(-30deg) translateY(20px)';
                    rightLeg.style.transform = 'rotate(30deg) translateY(20px)';
                    head.style.transform = 'translateY(10px) scale(0.97)';
                    break;
                case 'left':
                    robot.classList.add('move-left');
                    leftArm.style.transform = 'rotate(-80deg) translateX(-20px)';
                    leftLeg.style.transform = 'rotate(-30deg) translateX(-10px)';
                    head.style.transform = 'translateX(-10px) rotate(-8deg)';
                    break;
                case 'right':
                    robot.classList.add('move-right');
                    rightArm.style.transform = 'rotate(80deg) translateX(20px)';
                    rightLeg.style.transform = 'rotate(30deg) translateX(10px)';
                    head.style.transform = 'translateX(10px) rotate(8deg)';
                    break;
                case 'forward':
                    robot.classList.add('move-forward');
                    leftLeg.style.transform = 'rotate(-18deg) scaleY(1.15)';
                    rightLeg.style.transform = 'rotate(18deg) scaleY(1.15)';
                    head.style.transform = 'scale(1.08)';
                    break;
                case 'backward':
                    robot.classList.add('move-backward');
                    leftLeg.style.transform = 'rotate(-8deg) scaleY(0.85)';
                    rightLeg.style.transform = 'rotate(8deg) scaleY(0.85)';
                    head.style.transform = 'scale(0.93)';
                    break;
                case 'stop':
                    robot.classList.add('stop');
                    head.style.transform = 'scale(1)';
                    break;
            }
            // Remove animation after 700ms
            setTimeout(() => {
                robot.classList.remove('move-up', 'move-down', 'move-left', 'move-right', 'move-forward', 'move-backward', 'stop');
                leftArm.style.transform = '';
                rightArm.style.transform = '';
                leftLeg.style.transform = '';
                rightLeg.style.transform = '';
                head.style.transform = '';
            }, 700);
        });
    });

    // 3D tilt effect
    robot.addEventListener('mousemove', function(e) {
        const rect = robot.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateY = (x - centerX) / 8;
        const rotateX = (centerY - y) / 8;
        robot.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
    });
    robot.addEventListener('mouseleave', function() {
        robot.style.transform = '';
    });
});
