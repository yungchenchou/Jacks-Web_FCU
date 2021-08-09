/**
 * Program file name: Ex2_3.java 
 * Subject: run Ex2_3 programing with two integer
 * values then print out the sum value
 */
public class Ex2_3 {
    public static void main(String[] args) {
        // 將使用者接在程式後的 第 1 個 參數從 字串型態 (String)轉成 整數 (int) 型態
        int v1 = Integer.parseInt(args[0]);
        // 將使用者接在程式後的 第 2 個 參數從 字串型態 (String)轉成 整數 (int) 型態
        int v2 = Integer.parseInt(args[1]);
        // 印出 v1 + v2 的結果
        System.out.println(v1 + v2);
    }
}