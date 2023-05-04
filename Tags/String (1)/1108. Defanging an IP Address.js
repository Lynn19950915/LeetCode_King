1108. Defanging an IP Address

1. 逐個字元迴圈作業，遇到標點即以新符號取代寫入之。

2. [巧解] 以標點為分割符 .split 產生陣列，再用新符號 .join 取回字串。

3. [巧解] .replaceAll、.replace+/g。
