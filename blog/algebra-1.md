# 1. 群

对于一个集合 $S$ 和元素间的二元运算 $\oplus$ ，对于以下 $4$ 条性质

$$\begin{aligned}
\text{封闭性} && \forall a,b\in S, && a\oplus b\in S \\
\text{结合律} && \forall a,b,c\in S, && (a\oplus b)\oplus c=a\oplus (b\oplus c)\\
\text{幺元} && \exists 1\in S,s.t.\forall a\in S, && a1=1a=a\\
\text{逆元} && \forall a\in S, \exists a^{-1},s.t. && aa^{-1}=a^{-1} a=1\\
\end{aligned}$$

* 满足第一条性质，则称 $(S,\oplus)$ 是 **原群** 或 $\frac 14$ **群**。
* 满足前两条性质，则称 $(S,\oplus)$ 是 **半群** 或 $\frac 12$ **群**。
* 满足前三条性质，则称 $(S,\oplus,1)$ 是 **亚群** 或 **幺半群** 或 $\frac 34$ **群**。
* 满足全部四条性质，则称 $(S,\oplus,1)$ 是 **群**。

在不至于引起歧义的情况下，有时以集合 $S$ 或其他简写直接指代以上各种原群。

### 补充

$$\begin{aligned}
\text{交换律} && \forall a,b\in S && ab=ba\\
\text{零元} && \exists 0\in S,s.t.\forall a\in S &&a0=0a=0
\end{aligned}$$

若一个亚群不是交换群，则 $(ab)^m=a^mb^m$ 一般不能普遍成立。

零元并不是必要的性质。

我们在称某群的子集 $S_0\subset S$ 及相关运算为 **子群/子亚群/子半群/子原群** 等时，需要注意 $S_0$ 需要本身是一个群/亚群/半群/原群 。其中结合律是对任意元素自然满足的，因此需要检验另外三条性质，即

* 检验封闭性

* 子亚群一定包含亚群的幺元

* 子群中每个元素的逆元也在子群中

#### 可逆性的封闭性

在亚群 $(S,\oplus,1)$ 中，如果 $\exists a,b\in S$ 可逆，则 $ab$ 可逆，且

$$(ab)^{-1}=b^{-1}a^{-1}$$

#### 有逆元蕴含消去律

在亚群 $(S,\oplus,1)$ 中，对 $a,b,c\in S$ ，如果 $a$ 可逆，则 $ab=ac$ 和 $ba=ca$ 皆可推得 $b=c$

#### 习题

幺元、逆元、零元的唯一性

### 定义 1.1. 理想

如果有 $\forall s\in S,r\in H$ 满足 $sr\in H(rs\in H)$ ，则称半群 $(H,\oplus)$ 为 半群 $(S,\oplus)$ 的 **左理想(右理想)**

若 $(H,\oplus)$ 同时为 $(S,\oplus)$ 的左理想和右理想，则称 $(H,\oplus)$ 为 $(S,\oplus)$ 的 **理想** 。

### 定义 1.2. 陪集

设  $(H,\oplus)$ 是 $(S,\oplus)$ 的一个子半群。则 $\forall x\in S$ ，$xH(Hx)$ 称为 $x$ 关于子半群 $H$ 的 **左陪集(右陪集)** 。

# 2. 环与域

在一个集合 $S$ 上定义了加法 $+$ 和乘法 $\cdot$ ， 其中 $(S,+,0)$ 是一个交换群，$(S,\cdot,1)$ 是一个亚群，并且满足

$$\begin{aligned}
\text{分配律} && \forall a,b,c\in S && a\cdot (b+c)=a\cdot b+a\cdot c\\
&&&& (a+b)\cdot c=a\cdot c+b\cdot c
\end{aligned}$$

那么，我们称 $(S,+,\cdot)$ 是一个 **环**。

如果一个环的乘法亚群是交换亚群，那么我们称这是一个 **交换环**。

如果一个环除去加法单位元 $0$ 的乘法亚群是交换群，那么我们称这是一个 **域**。

如果一个环满足消去律，则称为 **整环**。



#### 习题

* 证明 非零对于乘法封闭 等价于 消去律

* 证明 $0$ 是乘法群的零元

* 证明域是整环

$$\mathbb Q,\mathbb R,\mathbb C$$

$$\mathbb F_2,\mathbb F_p,\mathbb Q(i)$$

# 3. 阶

设 $(S,\oplus,1)$ 是一个亚群，$a\in S$ ，若 $\exists k\in \mathbb Z_+$ 使得

$$a^k=1$$

则称 $a$ 是 **有限阶** 的。并记 $ord(a)=k_{min}$ ，称为 $a$ 的 **阶**。

否则称 $a$ 是 **无限阶** 的，记作 $ord(a)=+\infty$ 。

### 定理 3.1. 逆元的阶

若 $a$ 是亚群 $(S,\oplus,e)$ 中的一个有限阶元素，则 $a$ 可逆，

$$a^{-1}=a^{ord(a)-1}$$

且

$$ord(a)=ord(a^{-1})$$

证明如下

$$aa^{ord(a)-1}=a^{ord(a)}=e$$

所以 $a^{ord(a)-1}=a^{-1}$

由

$$(a^{-1})^{ord(a)}=(a^{-1})^{ord(a)}a^{ord(a)}=1$$

得到 $ord(a^{-1})\leq ord(a)$

又因为逆元是相互的，即$(a^{-1})^{-1}=a$

所以有 $ord(a)=ord((a^{-1})^{-1})\leq ord(a^{-1})$

综上，$ord(a)=ord(a^{-1})$

* 可逆元素不一定是有限阶的

### 定理 3.2. 阶的乘法

设有有限亚群 $(S,\oplus,e)$ 中，$a\in S$，且 $ord(a)=d$ ，则

$$ord(a^k)=\frac{d}{(d,k)}$$

### 定理 3.3. 有限亚群的元素可逆性

设有有限亚群 $(S,\oplus,e)$ 中，$a\in S$，则

$$a\text{可逆}\Leftrightarrow ord(a)\not=+\infty$$

### 定理 3.4. 阶的判定

若 $a$ 是亚群 $(S,\oplus,e)$ 中的一个有限阶元素，则

$$a^m=e\Leftrightarrow ord(a)\mid m$$

$$a^m=a^n\Leftrightarrow ord(a)\mid (m-n)$$


# 4. 同余

### 定义 4.1. 等价关系

对于集合 $S$ 上的一个二元关系 $\equiv$ ，若满足

$$\begin{aligned}
\text{自反律} && \forall a\in S, && a\equiv a\\
\text{对称性} && \forall a,b\in S, && a\equiv b \Leftrightarrow b\equiv a\\
\text{传递性} && \forall a,b,c\in S, && a\equiv b,b\equiv c \Rightarrow a\equiv c
\end{aligned}$$

则称 $\equiv$ 是集合 $S$ 上的一个 **等价关系**。

### 定义 4.2. 商集

集合 $S$ 关于等价关系 $\equiv$ 构成一个集合的集合，记作 $S/\equiv$，其中

$\forall x\in S,\exists A\in \overline S$，使得 $x\in A$。 

且 $\forall x,y\in S$，若 $x\equiv y$ 则 $x\in A \Leftrightarrow y\in A$

则集合 $S/\equiv$ 称为 集合 $S$ 关于等价关系 $\equiv$ 的 **商集**。 $A$ 称为 $S$ 上的一个 **等价类**。

### 定义 4.3. 同余关系

设 $(G,\oplus)$ 是一个半群，$\equiv$ 是 $G$ 上的一个等价关系。若有

$$a\equiv b,x\equiv y\Rightarrow ax\equiv by$$

则称 $\equiv$ 为半群 $(G,\oplus)$ 上的一个 **同余关系** 。

# 5. 群的同构

### 定义 5.1. 半群同态与同构

对于两个半群 $(G_1,\oplus_1),(G_2,\oplus_2)$ ，如果存在映射 $\sigma : G_1\rightarrow G_2$ ，使得

$$\forall x,y\in G_1,\sigma(x \oplus_1 y)=\sigma(x)\oplus_2\sigma(y)$$

则称这两个半群 **同态**。$\sigma$ 称为 **半群同态映射** 。

若 $\sigma$ 是可逆的，则称这两个半群 **同构**。$\sigma$ 称为 **半群同构映射** 。

### 定义 5.2. 亚群同态与同构

如果两个亚群 $(G_1,\oplus_1,e_1),(G_2,\oplus_2,e_2)$ 存在一个半群同态映射 $\sigma$ ，且 $\sigma(e_1)=e_2$ ，则称这两个亚群 **同态**。$\sigma$ 称为 **亚群同态映射** 。

若 $\sigma$ 是可逆的，则称这两个亚群 **同构**。$\sigma$ 称为 **亚群同构映射** 。