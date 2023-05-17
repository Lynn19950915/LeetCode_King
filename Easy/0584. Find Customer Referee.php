584. Find Customer Referee

問題：Customer 資料表記錄了會員資訊，找出所有非 2 號會員推薦之會員。

-----
解一：

- SELECT name FROM Customer WHERE referee_id <>2 OR referee_id IS NULL;
- SELECT name FROM Customer WHERE referee_id NOT IN (2) OR referee_id IS NULL; 

---
解二：IFNULL 預處理空值。

- SELECT name FROM Customer WHERE IFNULL(referee_id, 0) !=2;

---
解三：UNION 取聯集。

- SELECT name FROM Customer WHERE referee_id NOT IN (2) 
  UNION SELECT name FROM Customer WHERE referee_id IS NULL;
