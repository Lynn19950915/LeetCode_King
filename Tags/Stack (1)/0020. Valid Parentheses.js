20. Valid Parentheses

1. .replaceAll 消除所有成對的括號 (直至為空或長度不再變化)。

2. Stack: 右括號必須與上一個左括號配對，並檢查是否全數成對。

3. 索引：建立左、右括號的對應表，供 stack.pop() 時查驗用。
