326. Power of Three

1. 迴圈：Top-down 下除或 Bottom-up 上乘循環檢查。

2. 遞迴：呼叫 isPowerOfTwo(n/2) 直至值不大於 1，複雜度 logn。

3. 文字解：三進位制只有最高位為 1，可用 .replaceAll 或正規表達 /^1([0]+)?$/ 比對。

4. 二分搜尋：尋找「首個不小於 n 的 3^m」，複雜度 log19。

5. [巧解] pow(3,19) 必能整除 n、log10(n)/log10(3) 必為整數。
