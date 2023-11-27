// โค้ด JavaScript สำหรับการจัดการคำถามและคำตอบ
// ใช้ภาษา JavaScript เพื่อจัดการรีเควสต์และฐานข้อมูล SQLite ด้วย Fetch API

// คำถามและคำตอบจะถูกจัดเก็บในฐานข้อมูล SQLite

// รับคำถามและคำตอบจากฐานข้อมูลและแสดงบนหน้าเว็บ
function displayQuestionsAndAnswers() {
    // โค้ดสำหรับดึงข้อมูลคำถามและคำตอบจากฐานข้อมูล SQLite และแสดงบนหน้าเว็บ
}

// ส่งคำถามไปยังฐานข้อมูล SQLite
function sendQuestionToDatabase(question) {
    // โค้ดสำหรับส่งคำถามไปยังฐานข้อมูล SQLite
}

// รับการส่งฟอร์มคำถามและส่งข้อมูลไปยังฐานข้อมูลเมื่อมีการส่ง
document.getElementById("question-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const questionInput = document.getElementById("question-input");
    const questionText = questionInput.value.trim();
    if (questionText !== "") {
        sendQuestionToDatabase(questionText);
        questionInput.value = "";
    }
});

// เรียกใช้ฟังก์ชันเพื่อแสดงคำถามและคำตอบที่มีในฐานข้อมูล
displayQuestionsAndAnswers();
