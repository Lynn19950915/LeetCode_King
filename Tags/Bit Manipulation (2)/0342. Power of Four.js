342. Power of Four

1. 迴圈：Top-down 下除或 Bottom-up 上乘循環檢查。

2. 遞迴：呼叫 isPowerOfTwo(n/4) 直至值不大於 1，複雜度 logn。

3. 文字解：四進位制只有最高位為 1，可用 .replaceAll 或正規表達 /^1([0]+)?$/ 比對。

4. 位運算：全數進位以外，位元必須為奇數，即 n&(0x55555555)>0, n&(0xAAAAAAAA)=0。

5. 二分搜尋：尋找「首個不小於 n 的 4^m」，複雜度 log16。

6. [巧解] log10(n)/log10(4) 必為整數。
