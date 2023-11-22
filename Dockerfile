FROM node:slim
WORKDIR /usr/src/app
ENV WELLCOME_MESS="Tôi là Hưng Thịnh, Chào Mừng Bạn Đến Với Trang Web Của Tôi!!!!!!!!!!"
COPY package.json .
COPY package-lock.json .
RUN npm install
COPY . .
EXPOSE 4000
CMD ["npm", "start"]