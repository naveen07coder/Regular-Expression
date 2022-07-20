def findMod(a,n,m):
  mf=10**len(str(a))%m
  ans = 0
  while n:
    if n%2==1:
        ans=((ans*mf)%m+a)%m
    a = ((a*mf)%m+a)%m
    mf = pow(mf,2,m)
    n = n//2
  return ans
for _ in range(int(input())):
  a,n,m =[int(i)for i in input().split()]
  print(findMod(a,n,m))