FROM mcr.microsoft.com/dotnet/sdk:5.0 AS build
WORKDIR /app

COPY *.csproj ./
RUN dotnet restore

COPY . ./
RUN dotnet publish NETCore.WebAPI.sln -c Release -o dist

FROM mcr.microsoft.com/dotnet/aspnet:3.1
WORKDIR /app
COPY --from=build /app/dist .
ENTRYPOINT ["dotnet", "NETCore.WebAPI.dll"]