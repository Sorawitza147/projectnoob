setMode();

// ตั้งเวลาให้เรียกใช้ฟังก์ชัน setMode ทุก 1 นาที
setInterval(setMode, 60000);
function updateTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('time').textContent = timeString;
}

// เรียกใช้ฟังก์ชันเพื่อแสดงเวลาเริ่มต้น
updateTime();

// ตั้งเวลาให้เรียกใช้ฟังก์ชัน updateTime ทุก 1 วินาที
setInterval(updateTime, 1000);

function setMode() {
    const body = document.body;
    const date = new Date();
    const hour = date.getHours();
    
    if (hour >= 17 && hour < 19) { // 17.00 ถึง 18.59
        body.classList.remove('dark-mode', 'light-mode');
        body.classList.add('day-mode');
    } else if (hour >= 19 || hour < 6) { // 19.00 ถึง 05.59
        body.classList.remove('day-mode', 'light-mode');
        body.classList.add('dark-mode');
    } else if (hour >= 6 && hour < 17) { // 06.00 ถึง 16.59
        body.classList.remove('day-mode', 'dark-mode');
        body.classList.add('light-mode');
    }
}
