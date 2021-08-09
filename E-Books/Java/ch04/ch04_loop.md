# Loop 迴圈

## for loop

```java
for (statement 1; statement 2; statement 3) {
  // code block to be executed
}
```

### 範例 1:

請寫一個程式從 1 累加至 100

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int sum = 0;
        for(int i = 1; i <= 100; i++ ){
            sum = sum + i;
        }
        System.out.println(sum);
    }
}
```

## nest for loop

<img src="./fig4-3.png">

### 範例:

設計一個程式列出九九乘法表

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        for( int i = 1; i <= 9; i++){
            for(int j = 1; j <=9; j++){
                System.out.print( i*j + "\t");
            }
            System.out.println();
        }
    }
}
```

<h4><b>Output:</b></h4>

<img src="99table.png" />

### 範例:

使用者輸入整數 n ，印出高度為 n 由 \* 符號所組的三角形，例: n = 4

<pre>
*
**
***
****
</pre>

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int n = scn.nextInt();
        for( int i = 0; i < n; i++){
            for(int j = 0;j <= i; j++){
                System.out.print("*");
            }
            System.out.println();
        }
    }
}
```

<h4><b>Output</b></h4>

<img src="fig4-2.png" />

## foreach loop

### 範例:

假設一個陣列 data = {1, 9, 3, 5, 8, 2, 6}，請以 foreach 的語法將 data 中的元素一一列出，並使用 tab 將元素間隔開。

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int data[] = {1, 9, 3, 5, 8, 2, 6};
        for( int value : data){
            System.out.print(value + "\t");
        }
        System.out.println();
    }
}
```

<h4><b>Output</b></h4>

<img src="./fig4-4.png" />

## while loop

## do-while loop
