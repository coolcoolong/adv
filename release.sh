#!/bin/sh
node -v $i >/dev/null || { echo "$i node not found. please install node first"; exit 1; }
alias lnpm="cnpm --registry=http://registry.npm.lu-fe.com --registryweb=http://npm.lu-fe.com --cache=~/.npm/.cache/lnpm"
lnpm i

DIR="$(cd `dirname $0`; pwd)"

FISDIR=$DIR"/frontend/themes/default"
echo "进入目录"$FISDIR
cd $FISDIR

echo "拷贝静态文件至目录"
rm -rf static
cp -R ../../web/static ./

echo "开始使用fis3发布"
node $DIR/node_modules/fis3/bin/fis.js release prod -d ../../

echo "发布完成,删除临时静态文件"
#rm -rf static