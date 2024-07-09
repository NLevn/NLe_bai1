document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('login-btn').addEventListener('click', showLoginForm);
    document.getElementById('register-btn').addEventListener('click', showRegisterForm);
});

function showLoginForm() {
    const formsContainer = document.getElementById('forms-container');
    formsContainer.innerHTML = `
        <form id="login-form" action="login.php" method="POST">
            <h2>Đăng nhập</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Đăng nhập</button>
        </form>
    `;
}

function showRegisterForm() {
    const formsContainer = document.getElementById('forms-container');
    formsContainer.innerHTML = `
        <form id="register-form" action="register.php" method="POST">
            <h2>Đăng ký</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Xác nhận mật khẩu:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <label for="user-type">Đối tượng:</label>
            <select id="user-type" name="user-type" required>
                <option value="student">Học sinh</option>
                <option value="teacher">Giáo viên</option>
            </select>
            <div id="workplace-container" style="display: none;">
                <label for="workplace">Đơn vị công tác:</label>
                <input type="text" id="workplace" name="workplace">
            </div>
            <button type="submit">Đăng ký</button>
        </form>
    `;

    document.getElementById('user-type').addEventListener('change', function() {
        const workplaceContainer = document.getElementById('workplace-container');
        if (this.value === 'teacher') {
            workplaceContainer.style.display = 'block';
        } else {
            workplaceContainer.style.display = 'none';
        }
    });
}
