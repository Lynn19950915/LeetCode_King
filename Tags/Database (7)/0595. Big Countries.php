595. Big Countries

問題：World 資料表記錄了國家資訊，依指定條件輸出符合的國家。

-----
解一：
- SELECT name, population, area FROM World WHERE area>3000000 OR population>25000000;

---
解二：UNION 取聯集。
- SELECT name, population, area FROM World WHERE area>3000000 
  UNION SELECT name, population, area FROM World WHERE population>25000000;
