FROM nginx:alpine
COPY ./api /api
COPY ./conf.d /etc/nginx/conf.d