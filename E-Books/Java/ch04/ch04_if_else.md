# 流程控制 (if-else)

## if-else 語法

```java
if (condition) {
  // block of code to be executed if the condition is true
} else {
  // block of code to be executed if the condition is false
}
```

### 範例 1:

設計一個程式讓使用者輸入分數，程式判斷如果 >=0 則輸出 pass，否則輸出 fail

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int v1 = scn.nextInt();
        if (v1 >= 60) {
            System.out.println("pass");
        } else {
            System.out.println("fail");
        }
    }
}
```

### 範例 2:

設計一個程式讓使用者輸入分數，程式判斷分數是否介於 0~100 之間，如果是，則 分數 >=0 則輸出 pass，否則輸出 fail。如果分數不在 0~100 之間則輸出 "Error"。

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int score = scn.nextInt();
        if( score >= 0 && score <= 100){
            if (score >= 60) {
                System.out.println("pass");
            } else {
                System.out.println("fail");
            }
        }else{
            System.out.println("Error");
        }
    }
}
```

## if-else if 語法

```java
if (condition1) {
  // block of code to be executed if condition1 is true
} else if (condition2) {
  // block of code to be executed if the condition1 is false and condition2 is true
} else {
  // block of code to be executed if the condition1 is false and condition2 is false
}
```

### 範例 3

設計一個程式，可將使用輸入的成績轉換為 A, B, C… 等「等地表示法」<br/>
100~91: A, <br/>
90~81:B, <br/>
80~71:C, <br/>
70~60: D, <br/>
< 60: E

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int score = scn.nextInt();
        if( score >= 0 && score <= 100){
            if( score > 90){
                System.out.println("A");
            }else if( score > 80){
                System.out.println("B");
            }else if( score > 70){
                System.out.println("C");
            }else if( score > 60){
                System.out.println("D");
            }else{
                System.out.println("E");
            }
        }else{
            System.out.println("Error");
        }
    }
}
```

## switch 語法

```java
switch(expression) {
  case x:
    // code block
    break;
  case y:
    // code block
    break;
  default:
    // code block
```

### 範例 4:

輸入 1 到 7 的數字，輸出相對應星期幾的英文字，例如: 輸入 1，輸出 Monday

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        int day = scn.nextInt();
        switch(day){
            case 1:
                System.out.println("Monday");
                break;
            case 2:
                System.out.println("Tuesday");
                break;
            case 3:
                System.out.println("Wednesday");
                break;
            case 4:
                System.out.println("Thursday");
                break;
            case 5:
                System.out.println("Friday");
                break;
            case 6:
                System.out.println("Saturday");
                break;
            case 7:
                System.out.println("Sunday");
                break;
            default:
                System.out.println("Error");
        }
    }
}
```

### 範例 5:

輸入星期一到星期日的英文單字，輸出相對應星期幾的中文字，例如: 輸入 "Thursday"，輸出 星期四

```java
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scn = new Scanner(System.in);
        String str = scn.next();
        switch(str){
            case "Monday":
                System.out.println("星期一");
                break;
            case "Tuesday":
                System.out.println("星期二");
                break;
            case "Wednesday":
                System.out.println("星期三");
                break;
            case "Thursday":
                System.out.println("星期四");
                break;
            case "Friday":
                System.out.println("星期五");
                break;
            case "Saturday":
                System.out.println("星期六");
                break;
            case "Sunday":
                System.out.println("星期日");
                break;
            default:
                System.out.println("Error");
        }
    }
}
```
